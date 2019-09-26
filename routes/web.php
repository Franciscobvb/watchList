<?php

Route::get("/watchlist", "watchlist\WatchList@index");
Route::get("/watchlist/welcome", "watchlist\WatchList@store");
Route::get("/watchlist/addAsoc", "watchlist\WatchList@addAssoc");
Route::get("/watchlist/reloadtab", "watchlist\WatchList@reloadTab");
Route::get("/watchlist/delAsoc/{id}", "watchlist\WatchList@delAsoc");
Route::get("/watchlist/saveTableConf/{idsponsor}{line_number}{levels}{name}{consultant_id}{email}{mobile_number}{alternative_num}{country}{pay_rank}{distributor_status}{inactive_months}{renewal_date}{period1}{period2}{period3}", "watchlist\WatchList@saveTableConfig");
Route::get("/watchlist/loadInitConf", "watchlist\WatchList@initTableConfig");
