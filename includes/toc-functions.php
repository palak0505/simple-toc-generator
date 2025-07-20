<?php
function generate_toc($content) {
    if (!is_single()) return $content;

    preg_match_all('/<h([2-3])>(.*?)<\/h[2-3]>/', $content, $matches);
    if (empty($matches[2])) return $content;

    $toc = '<div class="simple-toc collapsible">';
    $toc .= '<button class="toc-toggle">Show/Hide Table of Contents</button>';
    $toc .= '<div class="toc-content">';
    $toc .= '<strong>Table of Contents</strong><ul>';

    foreach ($matches[2] as $i => $heading) {
        $slug = 'toc-' . $i;
        $anchor = "<a id=\"$slug\"></a>";
        $content = preg_replace('/' . preg_quote($heading, '/') . '/i', $anchor . $heading, $content, 1);
        $toc .= "<li><a href='#$slug'>" . strip_tags($heading) . "</a></li>";
    }

    $toc .= '</ul></div></div>';
    return $toc . $content;
}
add_filter('the_content', 'generate_toc');