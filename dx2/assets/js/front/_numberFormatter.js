
/**
 * @description Formats number to groups divided by given separator
 */
var NumberFormatter = function(separator){
    this.separator = separator;
}

/**
 * @description Performs number formatting
 * @param {Object} jQuery object containing the text to be formatted
 */
NumberFormatter.prototype.format = function($elem){
    var text = $elem.text();
    result = this.formatValue(text);
    $elem.html(result);
}

/**
 * @description Formats a value
 * @param {String} Value to be formatted
 */
NumberFormatter.prototype.formatValue = function(value){
    value = value.toString();
    var floatNum = value.indexOf('.') != -1;
    var index = floatNum? value.indexOf('.') - 1 : value.length - 1;
    var counter = 0;
    var chars = value.split('');
    var result = '';
    
    for(index; index >= 0; index--){
        if(counter++ == 3){
            counter = 0;
            result += '#';
        }
        result += chars[index];
    }
    
    result = result.split("").reverse().join("");
    result = result.replace(/#/g, this.separator);
    if(floatNum){
        result += value.substr(value.indexOf('.'), value.length - 1);
    }
    return result;
}