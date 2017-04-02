<?php

namespace App\Model;

class TextModel extends GridoModel {

    protected $tableName = 'texts';

    public function getTitleByPlacement($placement, $version) {
        $row = $this->getTable()->where('placement = ? AND version = ? AND type = "TITLE"', $placement, $version)->fetch();

        if ($row) {
            $row = $row->toArray();

            return $row['title'];
        }

        return '';
    }

    public function getContentByPlacement($placement, $v = 0) {
        return $this->getTable()->where('placement = ? AND version = ? AND type = "CONTENT"', $placement, $v)->order('order ASC, created_at ASC');
    }

    public function getContentByPlacementRandom($placement, $v = 0) {
        return $this->getContentByPlacement($placement, $v)->order('RAND()');
    }

    public function getContentByPlacementOffset($placement, $offset, $v = 0) {
        $rows = $this->getContentByPlacement($placement, $v)->fetchAll();
        $i = 0;

        foreach ($rows as $row) {
            if ($i == $offset) {
                return $row;
            }

            $i++;
        }
    }

    public function getContentByPlacementRandomLimited($placement, $limit, $v = 0) {
        return $this->getContentByPlacementRandom($placement, $v)->limit($limit);
    }
}
