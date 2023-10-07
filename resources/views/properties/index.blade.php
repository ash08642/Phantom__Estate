<x-layout>
    <form class="flex justify-center bg-gradient-to-r from-primary-700 to-secondary-500 py-4" action="/" method="get">
        <div class="flex flex-col justify-center place-items-center">
            <div class="flex items-center justify-center ">
                <div class="flex border-4 border-secondary-700 rounded">
                    <input name="search" id="search" type="text" class="bg-secondary-50 px-4 py-2 w-72 focus:border-secondary-500 focus:ring-secondary-400" placeholder="Search Properties...">
                </div>
            </div>
            <div class="flex space-x-8 mt-2 md:mt-0">
                <div>
                    <label for="purchasetype">Type of Payment</label>
                    <select name="purchasetype" class="bg-secondary-50 w-32 py-3 px-4 pr-9 block border-gray-200 rounded-md text-sm focus:border-secondary-500 focus:ring-secondary-400">
                        <option value="<?php echo ($purchasetype ?? 'All') ?>" selected hidden>
                            <?php echo ($purchasetype ?? 'All') ?>
                        </option>
                        <option>All</option>
                        <option>Buy</option>
                        <option>Rent</option>
                    </select>
                </div>
                <div>
                    <label for="propertytype">Type of Property</label>
                    <select name="propertytype" class="bg-secondary-50 w-32 py-3 px-4 pr-9 block border-gray-200 rounded-md text-sm focus:border-secondary-500 focus:ring-secondary-400">
                        <option value="<?php echo ($propertytype ?? 'All') ?>" selected hidden>
                            <?php echo ($propertytype ?? 'All') ?>
                        </option>
                        <option>All</option>
                        <option>Home</option>
                        <option>Apartment</option>
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="bg-primary-300 py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold text-primary-500 hover:text-slate-50 hover:bg-secondary-400 focus:outline-none focus:ring-2 focus:ring-secondary-500 focus:ring-offset-2 transition-all text-sm">
            Search
        </button>
    </form>
    <div class="mx-auto w-[95%]">
        <div class="flex flex-wrap mt-10">
            @foreach ($properties as $property)
                <x-property-card :property="$property"/>
            @endforeach
        </div>
    </div>
    <div class="mx-auto w-9/12 mt-6 p-4">
        {{$properties->links()}}
    </div>
    
</x-layout>