<div scope="col" class="flex justify-end px-4 py-3">
    <input type="text" class="border border-gray-600 rounded" placeholder="search&nbsp;.&nbsp;.&nbsp;." x-model='query'>
    <button type="button" class="px-3 border rounded hover:border-blue-600"
        x-on:click="$dispatch('search', {
                search: query
             })">
        <i class="fa fa-magnifying-glass"></i>
    </button>
</div>
