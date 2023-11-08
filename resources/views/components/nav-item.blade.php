@props(['label','icon','link'])
<?php
$path = trim(str_replace(url('/'),'',$link),'/');
$wildchar = $path == 'admin' ? '' : '*';
$is = request()->is($path.$wildchar);
?>
<li class="nav-item">
    <a href="<?= $link ?>" class="nav-link{{ $is ? ' active':'' }}">
        <i class="nav-icon {{ $icon }}"></i>
        <p>{{ $label }}</p>
    </a>
</li>