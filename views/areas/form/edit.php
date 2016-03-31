<div class="configWindow">

    <div class="--row">

        <div class="col-xs-6">

            <div class="form-group">
                <label for="form"><?= $this->translate('form') ?></label><br>
                <?= $this->select('formName', ['width' => '300', 'class' => 'form-control', 'placeholder' => $this->translate('form'), 'id' => 'formName', 'store' => $this->availableForms]) ?>
            </div>

        </div>

        <div class="col-xs-6">

            <div class="form-group">
                <label for="formType"><?= $this->translate('form type') ?></label><br>
                <?= $this->select('formType', ['width' => '300', 'class' => 'form-control', 'placeholder' => $this->translate('form'), 'id' => 'formType', 'store' => $this->availableFormTypes]) ?>
            </div>

        </div>

        <div class="col-xs-6">

            <div class="form-group">
                <label for="userCopy"><?= $this->translate('send copy to user') ?></label><br>
                <?= $this->checkbox('userCopy', ['width' => '300', 'class' => 'form-control', 'id' => 'userCopy']) ?>
            </div>

        </div>

        <div class="col-xs-6">

            <div class="form-group">
                <label for="sendMailTemplate"><?= $this->translate('mail template') ?></label><br>
                <?= $this->href('sendMailTemplate', ['width' => '300', 'class' => 'form-control', 'id' => 'sendMailTemplate']) ?>
            </div>


        </div>


    </div>

</div>