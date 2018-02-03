<!-- Uses a header that contracts as the page scrolls down. -->
<style>
    .demo-layout-waterfall .mdl-layout__header-row .mdl-navigation__link:last-of-type {
        padding-right: 0;
    }
</style>
<header class="mdl-layout__header mdl-layout__header--waterfall">
    <!-- Top row, always visible -->
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title "><a class="header_button" href="index.php">DPSG Windrose</a></span>
        <div class="mdl-layout-spacer"></div>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="">Chat</a>
            <a class="mdl-navigation__link" href="">Homepage</a>
            <a class="mdl-navigation__link" href="">Forum</a>
            <a class="mdl-navigation__link" href="">Galerie</a>
        </nav>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
            <label class="mdl-button mdl-js-button mdl-button--icon"
                   for="waterfall-exp">
                <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
                <input class="mdl-textfield__input" type="text" name="sample"
                       id="waterfall-exp">
            </div>
        </div>
    </div>

</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><a class="header_button" href="index.php">DPSG Windrose</a></span>

    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="LogIn.php">LogIn</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
    </nav>
</div>
<main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
</main>
