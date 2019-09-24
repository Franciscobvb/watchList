<?php

Route::get("/watchlist", "watchlist\WatchList@index");
Route::get("/watchlist/welcome", "watchlist\WatchList@store");
Route::get("/watchlist/addAsoc", "watchlist\WatchList@addAssoc");
Route::get("/watchlist/reloadtab", "watchlist\WatchList@reloadTab");
Route::get("/watchlist/delAsoc/{id}", "watchlist\WatchList@delAsoc");
