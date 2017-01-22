/**
 * Created by tanderson on 1/21/17.
 */
$(document).ready(function(){
    $('#password').strengthMeter('text', {
        container: $('#password-text-hierarchy-text'),
        hierarchy: {
            '0': ['text-danger', 'Enter a strong password!'],
            '5': ['text-warning', 'Well, you are doing better ...'],
            '10': ['text-warning', 'Keep going ...'],
            '15': ['text-success', 'Ok, this will do!']
        }
    });
});
