<?php

function makeTree(array $elements, ?int $parentId = null): array
{

    $tree = [];

    foreach ($elements as $element) {
        if ($element['parent_id'] !== $parentId) {
            continue;
        }

        $element['children'] = makeTree($elements, $element['id']);
        $tree[] = $element;
    }

    return $tree;
}

function drawTree(array $tree): string
{
    if (empty($tree)) {
        return '';
    }

    $layout = '<ul>';

    foreach ($tree as $leaf) {
        $layout .= '<li>' . $leaf['name'];

        if (isset($leaf['children'])) {
            $layout .=  drawTree($leaf['children']);
        }

        $layout .= '</li>';
    }

    $layout .= '</ul>';

    return $layout;
}
