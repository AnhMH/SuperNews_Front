<?php

/* 
 * Home page
 */

namespace App\Controller;

use App\Lib\Api;
use Cake\Core\Configure;

class ArticlesController extends AppController {
    /**
     * People top page
     */
    public function index($url = '') {
        $url = explode('.', $url);
        $param = array(
            'url' => $url[0],
            'get_relations' => 1
        );
        $data = Api::call(Configure::read('API.url_posts_detail'), $param);
        $this->set('data', $data);
        $this->set('breadcrumbs', array(
            array(
                'url' => $this->BASE_URL.'/danh-muc/'.$data['cate_url'],
                'name' => $data['cate_name']
            ),
            array(
                'url' => '',
                'name' => $data['name']
            )
        ));
        if (!empty($data['name'])) {
            $this->set('pageTitle', $data['name']);
        }
        if (!empty($data['description'])) {
            $this->set('pageDescription', $data['description']);
        }
        if (!empty($data['keyword'])) {
            $this->set('pageKeyword', $data['keyword']);
        }
        if (!empty($data['image'])) {
            $this->set('pageImage', $data['image']);
        }
        if (!empty($data['cate_url'])) {
            $this->set('_url', $data['cate_url']);
        }
    }
}