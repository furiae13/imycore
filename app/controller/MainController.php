<?php
/**
 * Created by PhpStorm.
 * User: Feast
 * Date: 18.08.2018
 * Time: 12:33
 */

use Imy\Core\Controller;
use Imy\Core\Tools;
use Imy\Core\DB;

class MainController extends Controller
{
    function init()
    {
        $this->v['name'] = 'Тестовое задание';
        $reviews = M('reviews')->get()->orderBy('date', 'DESC')->fetchAll();
        $this->v['reviews'] = $reviews;
    }

    function ajax_add_review() {
        $req = array();
        foreach ($_REQUEST as $key => $request) {
            $req[$key] = htmlspecialchars(strip_tags($request));
        }
        $review = array('name' => $req['name'], 'review' => $req['review']);
        try {
            $add_review = M('reviews')->setValues($review)->save();
        } catch (\Exception $e) {
            $err = 'bad query';
        }
        if (!empty($add_review)) {
            $info = M('reviews')->getById($add_review);
            $template = tpl('tmp.test');
            $info = json_decode(json_encode ( $info ) , true);
            $this->v['result'] = Tools::get_include_contents($template, $info);
        }
    }

}
