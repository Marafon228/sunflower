<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use app\models\Orders;
use yii\console\Controller;
use yii\console\ExitCode;
use Yii;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ImportController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex()
    {
        $filelist = glob(Yii::getAlias('@app/import/1c/*.xml'));
        foreach ($filelist as $file) {
            $data = simplexml_load_file($file);
            foreach ($data->orders as $item) {
                $order = Orders::findOne($item->order->id);
                $order->status = $item->order->status;
                $order->save();
            }
            unlink($file);
        }

        return ExitCode::OK;
    }
}