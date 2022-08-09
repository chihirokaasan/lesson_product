<?php
namespace App\Repository;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * @property Product $product
 */
class ProductRepository
{
    /**
     * 商品の検索
     * @param $request
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getPaginationListByConditions(
        $request,
        int   $limit
    ): LengthAwarePaginator
    {
        $query = Product::orderBy('id', 'desc');

        if (!empty($request->name)) {
            $query->where('name', 'LIKE', "%$request->name%");
        }

        if (isset($request->is_public)) {
            $query->where('category_id', $request->category_id);
        }

        return $query->paginate($request->per_page_record ?? $limit, ['*'], 'page', $request->page ?? 1);
    }

}
