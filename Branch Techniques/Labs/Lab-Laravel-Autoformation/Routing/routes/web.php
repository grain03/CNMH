<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// route get
Route::get('/', function () {
    return '<h1>welcome to laravel 10</10>';
});


// ===========================================================================
// =============================== route POST ================================
// ===========================================================================

// Route::get('post', function () {
//     return '
//      <form  action="post/dataPost" method="post">
//           <input type="hidden" name="_token" value="' . csrf_token() . '"/>
//           <input type="submit" value="go to method POST"/>
//      </form>
//     ';
// });

// Define a route for the GET method at the 'post' endpoint
Route::get('post', function () {
    // Display a form with csrf_field() as the hidden input
    return '
    <form  action="post/dataPost" method="post">
        ' . csrf_field() . '
        <input type="submit" value="go to method POST"/>
    </form>
    ';
});

// Define a route for the POST method at 'post/dataPost'
Route::post('post/dataPost', function () {
    // Display a message when accessed through the POST method
    return '<h2> This is all data from the method route POST</h2>';
});



// ===========================================================================
// ================================ route PUT ================================
// ===========================================================================

// Define a route for the GET method at the 'put' endpoint
Route::get('put', function () {
    // Display a form with a button triggering a PUT request
    return '
    <form  action="put/dataPut" method="post">
    <input type="hidden" name="_method" value="put"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PUT"/>
    </form>
    ';
});

// Define a route that responds specifically to PUT requests at 'put/dataPut'
Route::put('put/dataPut', function () {
    // Display a message when accessed through the PUT method
    return '<h2> This is all data from the method route PUT</h2>';
});


// ===========================================================================
// =============================== route PATCH ===============================
// ===========================================================================


// Define a route for the GET method at the 'patch' endpoint
Route::get('patch', function () {
    // Display a form with a button triggering a PATCH request
    return '
    <form  action="patch/dataPATCH" method="post">
    <input type="hidden" name="_method" value="PATCH"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PATCH"/>
    </form>
    ';
});

// Define a route that responds specifically to PATCH requests at 'patch/dataPATCH'
Route::patch('patch/dataPATCH', function () {
    // Display a message when accessed through the PATCH method
    return '<h2> This is all data from the method route PATCH</h2>';
});



// ===========================================================================
// =============================== route DELETE ==============================
// ===========================================================================

// Define a route for the GET method at the 'delete' endpoint
Route::get('delete', function () {
    // Display a form with a button triggering a DELETE request
    return '
    <form  action="delete/dataDELETE" method="post">
    <input type="hidden" name="_method" value="DELETE"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method DELETE"/>
    </form>
    ';
});

// Define a route that responds specifically to DELETE requests at 'delete/dataDELETE'
Route::delete('delete/dataDELETE', function () {
    // Display a message when accessed through the DELETE method
    return '<h2> This is all data from the method route DELETE</h2>';
});


// ===========================================================================
// =============================== route DELETE ==============================
// ===========================================================================


// Define a route for the GET method at the 'any' endpoint
Route::get('any', function () {
    // Display a form with four buttons, each triggering a different HTTP method
    return '
    <form  action="any/dataANY" method="post">
        ' . csrf_field() . '
        <input type="submit" value="go to method POST"/>
    </form>
    <form  action="any/dataANY" method="post">
    <input type="hidden" name="_method" value="put"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PUT"/>
    </form>
    <form  action="any/dataANY" method="post">
    <input type="hidden" name="_method" value="PATCH"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PATCH"/>
    </form>
    <form  action="any/dataANY" method="post">
    <input type="hidden" name="_method" value="DELETE"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method DELETE"/>
    </form>
    ';
});

// Define a route that responds to any HTTP method at 'any/dataANY'
Route::any('any/dataANY', function () {
    // Display a message when accessed through any HTTP method
    return '<h2> This is all data from the method route ANY</h2>';
});


// ===========================================================================
// =============================== route MATCH ===============================
// ===========================================================================
// Define a route for the GET method at the 'match' endpoint
Route::get('match', function () {
    // Display a form with four buttons, each triggering a different HTTP method
    return '
    <form  action="match/dataMATCH" method="post">
        ' . csrf_field() . '
        <input type="submit" value="go to method POST"/>
    </form>
    <form  action="match/dataMATCH" method="post">
    <input type="hidden" name="_method" value="PUT"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PUT"/>
    </form>
    <form  action="match/dataMATCH" method="post">
    <input type="hidden" name="_method" value="PATCH"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method PATCH"/>
    </form>
    <form  action="match/dataMATCH" method="post">
    <input type="hidden" name="_method" value="DELETE"/>
        ' . csrf_field() . '
        <input type="submit" value="go to method DELETE"/>
    </form>
    ';
});

// Define a route that responds to both PUT and DELETE HTTP methods at 'match/dataMATCH'
Route::match(['put', 'delete'], 'match/dataMATCH', function () {
    // Display a message when accessed through PUT or DELETE
    return '<h2> This is all data from the method route MATCH</h2>';
});
