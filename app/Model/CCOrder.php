<?php

declare(strict_types=1);

namespace App\Model;

use App\Util\Date;

class CCOrder extends YhBaseModel
{
    /**
     * @var string
     */
    protected $table = "cc_order";

    //主键
    protected $primaryKey = "cc_order_id";

    const UPDATED_AT = 'update_time';


    public function syncOrder($commodity)
    {
        if (empty($commodity)) {
            return;
        }
        self::where('goods_id', $commodity->item_id)
            ->where('is_fk_collect', 0)
            ->where('status', 10)
            ->chunk(100, function ($list) use ($commodity) {
                $insert = [];
                foreach ($list as $val) {
                    $insert[] = [
                        'commodity_id' => $commodity->id,
                        'secret' => "{$val->code_2}" . (!empty($val->yzm) ? "  验证码：{$val->yzm}" : ""),
                        'third_order_id' => $val->cc_order_id,
                        'create_time' => Date::current(),
                    ];
                }
                Card::insert($insert);
                self::whereIn('cc_order_id', array_column($insert, 'third_order_id'))->update(['is_fk_collect' => 1]);
            });
    }
}
