<html lang="fa" dir="rtl">
<?php include ('partials_head.php'); ?>
<body>
<?php include ('partials_header.php'); ?>
<?php include ('partials_page_head.php'); ?>
<main class="uk-padding-large uk-padding-remove-horizontal">
    <div class="uk-container uk-container-large">
        <div data-uk-grid>
            <div class="uk-width-1-1 uk-width-1-4@s">
                <div class="uk-border-rounded uk-background-muted uk-padding-small filterWrapper" data-uk-sticky="offset:130; bottom: true;">
                    <div class="uk-padding-small">
                        <form class="uk-child-width-1-1 uk-grid-medium" data-uk-grid>
                            <div>
                                <label>
                                    <input type="text" placeholder="دنبال چه چیزی می‌گردید ؟" class="uk-input">
                                </label>
                            </div>
                            <div>
                                <label>
                                    <select class="uk-select">
                                        <option value>- انتخاب دسته‌بندی -</option>
                                        <option value="1">گزینه شماره یک</option>
                                        <option value="2">گزینه شماره دو</option>
                                    </select>
                                </label>
                            </div>
                            <div>
                                <label>
                                    <select class="uk-select">
                                        <option value>- انتخاب موقعیت -</option>
                                        <option value="3">گزینه شماره یک</option>
                                        <option value="4">گزینه شماره دو</option>
                                    </select>
                                </label>
                            </div>
                            <div>
                                <h5 class="font f700 uk-margin-small-bottom">برچسب ها</h5>
                                <div class="uk-margin-small">
                                    <input class="uk-checkbox" type="checkbox" id="checkbox1" checked>
                                    <label for="checkbox1"> عنوان گزینه اول</label>
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-checkbox" type="checkbox" id="checkbox2">
                                    <label for="checkbox2"> عنوان گزینه دوم</label>
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-checkbox" type="checkbox" id="checkbox1">
                                    <label for="checkbox1"> عنوان گزینه اول</label>
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-checkbox" type="checkbox" id="checkbox2">
                                    <label for="checkbox2"> عنوان گزینه دوم</label>
                                </div>
                            </div>
                            <div>
                                <button class="uk-button uk-button-primary uk-border-rounded uk-box-shadow-small uk-width-1-1">
                                    <i class="far fa-filter"></i>
                                    <span>فیلتر</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-1 uk-width-expand@s">
                <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l uk-grid-medium" data-uk-grid data-uk-scrollspy="target: > div; cls: uk-animation-slide-bottom-small; delay: 250">
                    <?php for ($i=1; $i<10; $i++) { ?>
                        <?php include ('partials_list_grid.php'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include ('partials_footer.php'); ?>
<?php include ('partials_auth_modal.php'); ?>
</body>
</html>