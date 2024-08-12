<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\PurchaseList; // Import the Log facade
use App\Models\Category;

class OrderController extends Controller
{
    private $purchaselist;
    public function __construct(PurchaseList $purchaselist)
    {

        $this->purchaselist = $purchaselist;
    }
    public function index()
    {
        $categorys = Category::where('parent_id', 0)->get();

        $userId = Auth::id();
        $purchaselist = PurchaseList::where('id_user', $userId)
            ->latest()
            ->paginate(10);
        $user = Auth::user();
        return view('orders.index', compact('purchaselist', 'user', 'categorys'));
    }
    public function accept($id)
    {
        $this->purchaselist->find($id)->update([
            'Status' => 'Thành công'
        ]);
        return redirect()->route('orders.index');
    }
}
