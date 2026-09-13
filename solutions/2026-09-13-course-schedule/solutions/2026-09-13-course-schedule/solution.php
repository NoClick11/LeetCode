<?php

function canFinish($numCourses, $prerequisites) {
    $graph = array_fill(0, $numCourses, []);
    $indegree = array_fill(0, $numCourses, 0);
    foreach ($prerequisites as $pair) {
        $a = $pair[0];
        $b = $pair[1];
        $graph[$b][] = $a;
        $indegree[$a]++;
    }
    $queue = [];
    for ($i = 0; $i < $numCourses; $i++) {
        if ($indegree[$i] === 0) {
            $queue[] = $i;
        }
    }
    $visited = 0;
    while (!empty($queue)) {
        $node = array_shift($queue);
        $visited++;
        foreach ($graph[$node] as $next) {
            $indegree[$next]--;
            if ($indegree[$next] === 0) {
                $queue[] = $next;
            }
        }
    }
    return $visited === $numCourses;
}
