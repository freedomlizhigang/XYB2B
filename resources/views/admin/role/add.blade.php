<form action="javascript:ajax_submit();" method="post" id="form_ajax">
    {{ csrf_field() }}

	<table class="table table-striped">
        <tr>
            <td class="td_left">角色名称：</td>
            <td>
                <input type="text" name="data[name]" class="form-control input-sm" value="{{ old('data.name') }}">
                <p class="input-info"><span class="color_red">*</span>最多50字符</p>
            </td>
        </tr>
        <tr>
            <td class="td_left">状态：</td>
            <td>
                <label class="radio-inline"><input type="radio" name="data[status]" checked="checked" class="input-radio" value="1">
					是</label>
				<label class="radio-inline"><input type="radio" name="data[status]" class="input-radio" value="0">否</label>
            </td>
        </tr>
    </table>
	<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
        <div onclick='ajax_submit_form("form_ajax","{{ url('/console/role/add') }}")' name="dosubmit" class="btn btn-info">提交</div>
    </div>
</form>