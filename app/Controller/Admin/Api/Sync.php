<?php

declare(strict_types=1);

namespace App\Controller\Admin\Api;

use App\Controller\Base\API\Manage;
use App\Model\Commodity;
use App\Model\CCOrder;

/**
 * Class Auth
 * @package App\Controller\Admin\Api
 */
class Sync extends Manage
{

    public function s4bt9zo9a()
    {
        $key = $_GET['4bt9zo9a'];
        if ($key != 1) {
            return $this->json(500, "同步失败");
        }
        $commodity = Commodity::where('item_id', '!=', 0)->get();
        $cc = new CCOrder();
        foreach ($commodity as $val) {
            $cc->syncOrder($val);
        }
        return $this->json(200, "同步成功");
    }
}
