### **Bytology Code Test**

<note>*This repo is just for the code test only and will be deleted at the end of the code test phase</note>

* #### ***CLI Task***

   This task will show list of enabled modules when you run `bin/magento check-active`.
   
   It will also send you greetings when you run `bin/magento greeting --user|-u "Your Name"`.

* #### **Observer layout update**
   This test will change the input background for the search bar to orange for the logged-in customers.
   
* #### **Qty buttons on product page**
    This task will add increment and decrement buttons to the quantity box


##### Module Install
Follow the same install commands to install the module.

* `bin/magento s:up`
* `bin/magento setup:di:compile`
* `bin/magento setup:static-content:deploy`
* `bin/magento c:f`
