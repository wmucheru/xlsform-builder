/*
 * http://jsfiddle.net/hybrid13i/JXrwM/ - JSON to CSV Converter
 *
 */
var xfront = {
    
    // initialize any necessary plugins
    init: function(){
        
    },
    
    form: function(){
        
        // gets the serialized form data for remote manipulation
        data: function(){
            var formData = $("").serialize();
            
            if(formData){
                return formData;
            }
            else{
                xfront.log('Form data not loaded');
            }
        },
        
        // dynamic selection of options for each field type
        _options: function(){
            
        }
    },
    
    // 
    help: {
        
        // show info depending on selected option (XLSForm.org)
        load: function(){
            
        }
    }
    
    log: function(msg){
        
        // we can also get creative with the logging (send stats if app)
        
        console.log(msg);
    }
};

xfront.init();