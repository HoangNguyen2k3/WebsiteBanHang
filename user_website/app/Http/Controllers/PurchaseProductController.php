<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseList;
use Illuminate\Support\Facades\Log;

class PurchaseProductController extends Controller
{
    private $purchaselist;
    public function __construct(PurchaseList $purchaselist)
    {

        $this->purchaselist = $purchaselist;
    }
    public function index()
    {
        $purchaselist = PurchaseList::orderBy('id', 'desc')->paginate(5);

        Log::info('haha');
        return view('admin.menus.index', compact('purchaselist'));
    }
    public function accept($id)
    {
        $this->purchaselist->find($id)->update([
            'Status' => 'Đang giao hàng',
        ]);
        return redirect()->route('purchase.index');
    }
    public function delete($id)
    {
        $this->purchaselist->find($id)->update([
            'Status' => 'Đã bị hủy',
        ]);
        return redirect()->route('purchase.index');
    }
    public function totalSuccessful()
    {
        $purchaseproduct = $this->purchaselist->where('Status', 'Thành công')->get();
        $totalAmount = $this->purchaselist->where('Status', 'Thành công')->sum('price');
        Log::info($purchaseproduct);
        return view('admin.chart.thongke', compact('totalAmount', 'purchaseproduct'));
    }
}
