FancyUI.refresh = function() {
    this.autocomplete();

    //initialize datepicker
    this.datepicker()
    this.sidebar();
    this.formsInitialize();
    this.billReceiveFormInitialize();
    this.employeeFormInitialize();
    
    if((location.pathname).indexOf("/quick_entry/")!==-1 || 
        (location.pathname).indexOf("/create") !==-1){
        this.hideSidebar();
    }

    this.hideSidebar();

    Waves.displayEffect();
    //screens
    this.sales();
};