<div id="authModal" class="uk-flex-top" data-uk-modal>
    <div class="uk-modal-dialog uk-margin-auto-vertical uk-border-rounded uk-box-shadow-medium uk-overflow-hidden uk-width-large">
        <div class="uk-modal-header">
            <ul class="uk-child-width-auto uk-grid-medium modalTabs" data-uk-switcher="connect: .authPages; animation: uk-animation-slide-right-small, uk-animation-slide-left-small" data-uk-grid>
                <li><a href="#">ورود به حساب</a></li>
                <li><a href="#">ساخت حساب کاربری</a></li>
            </ul>
        </div>
        <div class="uk-modal-body">
            <div class="uk-switcher authPages">
                <div>
                    <form id="login" class="uk-child-width-1-1 uk-grid-small" data-uk-grid>
                        <div>
                            <label>
                                <input type="text" class="uk-input uk-form-large" placeholder="نام کاربری یا ایمیل">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="password" class="uk-input uk-form-large" placeholder="رمز عبور">
                            </label>
                        </div>
                        <div>
                            <div class="uk-child-width-auto uk-flex-between" data-uk-grid>
                                <div>
                                    <div class="uk-margin">
                                        <input class="uk-checkbox" type="checkbox" id="checkbox2">
                                        <label for="checkbox2"> مرا بخاطر بسپار</label>
                                    </div>
                                </div>
                                <div class="uk-flex uk-flex-middle">
                                    <a href="#" class="uk-text-secondary uk-text-tiny f500">فراموشی رمز عبور</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-box-shadow-small uk-width-1-1 iconBalance">
                                <span>ورود به حساب کاربری</span>
                                <i class="far fa-sign-in fa-flip-horizontal"></i>
                            </button>
                        </div>
                        <div><hr class="uk-margin-top uk-margin-bottom uk-divider-icon"></div>
                        <div>
                            <div class="uk-child-width-1-1 uk-child-width-1-2@s uk-grid-small uk-grid-divider" data-uk-grid>
                                <div>
                                    <a href="#" class="uk-button uk-button-twitter uk-width-1-1 uk-border-rounded uk-box-shadow-small">
                                        <i class="fab fa-twitter"></i>
                                        <span>ورود با توئیتر</span>
                                    </a>
                                </div>
                                <div>
                                    <a href="#" class="uk-button uk-button-facebook uk-width-1-1 uk-border-rounded uk-box-shadow-small">
                                        <i class="fab fa-facebook"></i>
                                        <span>ورود با فیسبوک</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div>
                    <form id="register" class="uk-child-width-1-1 uk-grid-small" data-uk-grid>
                        <div>
                            <label>
                                <input type="text" class="uk-input uk-form-large" placeholder="فیلد شماره یک">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="uk-input uk-form-large" placeholder="فیلد شماره دو">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="text" class="uk-input uk-form-large" placeholder="فیلد شماره سه">
                            </label>
                        </div>
                        <div>
                            <button class="uk-button uk-button-primary uk-button-large uk-border-rounded uk-box-shadow-small uk-width-1-1 iconBalance">
                                <i class="far fa-user-plus"></i>
                                <span>ساخت حساب کاربری</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>