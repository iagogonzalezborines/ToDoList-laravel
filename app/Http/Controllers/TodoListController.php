<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\listItem;

class TodoListController extends Controller
{

    public function index()
    {
        return view('welcome', ['listItems' => listItem::all()]);
    }


    public function toggleCompleted(Request $request, $id)
    {
        $listItem = listItem::find($id);
        
        if (!$listItem) {
            return redirect()->back()->with('error', 'Item not found.');
        }
    
        $action = $request->input('action');
    
        switch ($action) {
            case 'mark':
                $listItem->is_complete = 1;
                $listItem->save();
                break;
            case 'unmark':
                $listItem->is_complete = 0;
                $listItem->save();
                break;
            case 'delete':
                $listItem->delete();
                break;
            default:
                return redirect()->back()->with('error', 'Invalid action.');
        }
    
        return redirect('/');
    }
    

    public function deleteItem($id)
    {
        $listItem = listItem::find($id);
        $listItem->delete();
        return redirect('/');
    }


    public function saveItem(Request $request)
    {
        $newListItem = new listItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = false;
        $newListItem->save();
        return redirect('/');
    }
}
