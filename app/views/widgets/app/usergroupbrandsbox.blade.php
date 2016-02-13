<div class='box-content'>
    <div class="lead">
        <i class="icon-briefcase text-info"></i>
        {{ $user->getFullname() }}'s Brands and Brand Groups
    </div><!--/.lead-->

    <table class='table table-bordered table-striped' style='margin-bottom:0;'>
        <thead>
        <tr>
            <th>
                Brand
            </th>

             <th>
                Group
            </th>
        </tr>
        </thead>
        <tbody>
            @foreach (Groups::getRelationProvider()->findUserBrands($user->id, true) as $brand => $groups)
            <tr>
                <td data-title='Brand'>{{ $brand }}</td>
                <td data-title='Group'>
                @foreach ($groups as $group)
                {{ $group->group_type == 1 ? $group->name.'&nbsp;&nbsp;' : '' }}
                @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div> <!--/.box-content-->