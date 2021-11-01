<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomersExport implements FromCollection, WithMapping, WithHeadings
{
    /**
     * @return Collection
     */
    public function collection()
    {
        return Customer::all();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            trans('admin.customer.columns.id'),
            trans('admin.customer.columns.first_name'),
            trans('admin.customer.columns.last_name'),
            trans('admin.customer.columns.email'),
            trans('admin.customer.columns.phone'),
            trans('admin.customer.columns.activated'),
            trans('admin.customer.columns.forbidden'),
        ];
    }

    /**
     * @param Customer $customer
     * @return array
     *
     */
    public function map($customer): array
    {
        return [
            $customer->id,
            $customer->first_name,
            $customer->last_name,
            $customer->email,
            $customer->phone,
            $customer->activated,
            $customer->forbidden,
        ];
    }
}
