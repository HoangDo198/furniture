<?php

use App\Models\Category;

if (!function_exists('get_recursive_category')) {
    /**
     * @param null $explodeId
     */
    function get_recursive_category($explodeId = null)
    {
        if ($explodeId) {
            $category = app(Category::class)->findWhereNotIn(
                'id', [$explodeId], ['id', 'name', 'parent_id']
            );
        } else {
            $category = app(Category::class)->all([
                'id', 'name', 'parent_id'
            ])->toArray();
        }

        return recursive_category_resolver($category, 0);
    }
}

if (!function_exists('recursive_category_resolver')) {
    /**
     * @param $cat
     * @param $parent_id
     * @param string $prefix
     * @return array
     */
    function recursive_category_resolver($cat, $parent_id, $prefix = '')
    {
        $result = [];
        foreach ($cat as $key => $item)
        {
            if ($item['parent_id'] == $parent_id) {
                $result[] = [
                    'value' => $item['id'],
                    'name' => $prefix.$item['name'],
                    'parent_id' => $item['parent_id']
                ];

                unset($cat[$key]);

                $child = recursive_category_resolver($cat, $item['id'], $prefix.'|---');
                $result = array_merge($result, $child);
            }
        }

        return $result;
    }
}
