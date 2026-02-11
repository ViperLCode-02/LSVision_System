<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('welcome');
});

// Authenticated routes
Route::middleware('auth')->group(function () {
    
    // Main dashboard redirect based on role
    Route::get('/dashboard', function () {
        $user = auth()->user();
        
        switch($user->role) {
            case 'owner':
            case 'co_admin':
                return redirect()->route('enterprise.dashboard');
            case 'resort_manager':
                return redirect()->route('shyren-bugak.dashboard');
            case 'hotel_manager':
                return redirect()->route('lsv-hotel.dashboard');
            case 'agri_manager':
                return redirect()->route('lsv-agri.dashboard');
            default:
                return view('dashboard'); // Generic fallback
        }
    })->name('dashboard');
    
    // Enterprise Dashboard (Owner & Co-Admin only)
    Route::get('/enterprise-dashboard', function () {
        return view('dashboards.enterprise');
    })->middleware('role:owner,co_admin')->name('enterprise.dashboard');
    
    // Shyren Bugak Resort Dashboard
    Route::get('/shyren-bugak-dashboard', function () {
        return view('dashboards.shyren-bugak');
    })->middleware('role:owner,co_admin,resort_manager')->name('shyren-bugak.dashboard');
    
    // LSV Hotel Dashboard
    Route::get('/lsv-hotel-dashboard', function () {
        return view('dashboards.lsv-hotel');
    })->middleware('role:owner,co_admin,hotel_manager')->name('lsv-hotel.dashboard');
    
    // LSV Agri Dashboard
    Route::get('/lsv-agri-dashboard', function () {
        return view('dashboards.lsv-agri');
    })->middleware('role:owner,co_admin,agri_manager')->name('lsv-agri.dashboard');
    
    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';