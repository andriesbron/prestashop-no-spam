class ContactController extends ContactControllerCore {
    public $spammers = [
        "annoying.spammer.from@gmail.com",
        "another.annoying.spammer.from@gmail.com
    ];
    
    public function postProcess()
    {
        if (Tools::isSubmit('submitMessage')) {
            if (!in_array(Tools::getValue('from'), $this->spammers))
            {
                parent::postProcess();
            }
            else {
                Tools::redirect('pagenotfound');
            }
        }
    }
}
