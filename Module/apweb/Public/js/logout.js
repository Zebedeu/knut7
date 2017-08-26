/*
 *
 * knut7 Framework (http://framework.artphoweb.com/)
 * knut7 FW(tm) : Rapid Development Framework (http://framework.artphoweb.com/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      http://github.com/zebedeu/artphoweb for the canonical source repository
 * @copyright (c) 2016.  knut7  Software Technologies AO Inc. (http://www.artphoweb.com)
 * @license   http://framework.artphoweb.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.0
 */

$(function () {
    $('#closse').click(function () {
        document.location = 'User/DestroySession'
    });
});
// $(function(){

// $('#signIn').validate({

// rules:{
// username: {
// require: true,
//         username: true
// },
//         password: {
//         require: true,
//                 minlength: 6
//         }
// },
//         messages: {
//         username: {
//         require: "coloca um user ",
//         }

//         password: {
//         require: "coloca uma senha superior a 6 char",
//         }
//         }

// });
//         $('#username').focus();
//         $('#password').focus();
// });