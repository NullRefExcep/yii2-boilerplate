/**
 * @section useful functions to types
 */
(function () {
    String.prototype.addUrlParam = function (key, value) {
        return tools.addUrlParam(this, key, value);
    };
    String.prototype.format = function (map) {
        var newValue = this, key, value, i, index, arg;
        for (i = 0; i < arguments.length; i++) {
            arg = arguments[i];
            if (tools.isObject(arg)) {
                for (index in arg) {
                    if (arg.hasOwnProperty(index)) {
                        value = arg[index];
                        key = '{' + index + '}';
                        newValue = newValue.replace(new RegExp(key, 'g'), value);
                    }
                }
            } else {
                key = '{' + i + '\\}';
                newValue = newValue.replace(new RegExp(key, 'g'), arg);
            }
        }
        return newValue;
    };
})();
/**
 * @section tools object
 */
var tools = {
    isString: function (obj) {
        return typeof obj === 'string';
    },
    isObject: function (obj) {
        return typeof obj === 'object';
    },
    isNumber: function (obj) {
        return typeof obj === 'number';
    },
    isUndefined: function (value) {
        return typeof value === 'undefined';
    },
    isDefined: function (value) {
        return typeof value !== 'undefined';
    },
    addUrlParam: function (base, key, value) {
        if (base && key && value) {
            var sep = (base.indexOf('?') > -1) ? '&' : '?';
            return base + sep + key + '=' + value;
        }
        return base;
    }
};