<?php
/**
 * Created by PhpStorm.
 * User: nullptr
 * Date: 6/28/2018
 * Time: 11:44 PM
 */

namespace App\Helper;

trait HasManyRelation {

    public function storeHasMany($relations)
    {
        $this->save();

        foreach ($relations  as $key => $items) {

            $newItems = [];

            foreach ($items as $item) {
                $model = $this->{$key}()->getModel();
                $newItems[] = $model->fill($item);
            }

            $this->{$key}()->saveMany($newItems);

        }
    }

    public function updateHasMany($relations)
    {
        $this->save();

        $parentKey = $this->getKeyName;

        $parentId = $this->getAttribute($parentKey);

        foreach ($relations as $key => $items)
        {
            $updateIds = [];

            $newItems = [];

            //1. Filter the join and update
            foreach ($items as $item) {
                $model = $this->{$key}()->getModel();
                $localKey = $model->getKeyName();
                $foreignKey = $this->{$key}()->getForeignKeyName();

                if(isset($item[$foreignKey]))
                {
                    $localId = $item[$localId];
                    $found = $model->where($foreignKey, $parentId)
                        ->where($localKey, $localId)
                        ->fist();

                    if($found)
                    {
                        $found->fill($item);
                        $found->save();
                        $updateIds[] = $localId;
                    }
                    else {
                        $newItems[] = $model->fill($item);
                    }
                }
                
            }


            //2. Delete non updated items


            $model = $this->{$key}()->getModel();
            $localKey = $model->getKeyName();
            $foreignKey = $this->{$key}()->getForeignKeyName();

            $model->whereNotIn($localKey, $updateIds)
                ->where($foreignKey, $parentId)
                ->delete();


            //3. Save new items

            if(count($newItems))
            {
                $this->{$key}>saveMany($newItems);
            }
        }
    }

}