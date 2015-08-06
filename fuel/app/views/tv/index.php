<!-- Main -->
<div id="main">

	<?= $hoge; ?>

<!-- 	"query" : 検索キーワード
		"service" : 検索対象サービスリスト,
		"search" : 検索対象フィールドリスト,
		"join" : 取得対象フィールドリスト,
		"filters" : フィルタ指定リスト(オプション),
			type	equal もしくは range
			field	フィルタ対象フィールド名
			value (equal 指定時のみ)	絞込み条件となる値
			from (range 指定時のみ, オプション)	範囲指定の開始指定
			to (range 指定時のみ, オプション)	範囲指定の終端指定
			include_lower (range 指定時のみ, オプション)	開始指定を含むか否か(省略時含む)
			include_upper (range 指定時のみ, オプション)	終端指定を含むか否か(省略時含む)
		"sort_by" :  並べ替えフィールド名(オプション),
			last_comment_time	コメントが新しい/古い順
			view_counter	再生数が多い/少ない順
			start_time	投稿日時が新しい/古い順
			mylist_counter	マイリスト数が多い/少ない順
			comment_counter	コメント数が多い順/少ない順
			length_seconds	再生時間が長い順/短い順
		"order" : 並べ替え順序 "desc" もしくは "asc"(オプション、デフォルト: "desc"),
		"from" : N (数値指定、オプション、デフォルト: 0),
		"size" : M (数値指定、オプション、デフォルト: 10, 最大: 100),
		"issuer" : サービス/アプリケーション名 (最大: 40文字)
		 -->
	
	<section id="search-form">
		<div class="container">
			<form name="searchForm">
				<input type="text" name="query" placeholder="query" value="" />
				<label><input type="radio" name="search" value="<?= Controller_Ajax::NICO_SEARCH_KEYWORD ?>" checked="checked">キーワード検索</label>
				<label><input type="radio" name="search" value="<?= Controller_Ajax::NICO_SEARCH_TAG ?>">タグ検索</label>
				<input type="text" name="filters" placeholder="filters" value="" />
				<input type="text" name="sort_by" placeholder="sort_by" value="" />
				<label><input type="radio" name="order" value="desc" checked="checked">降順</label>
				<label><input type="radio" name="order" value="asc">昇順</label>
				<input type="text" name="from" placeholder="from" value="" />
				<input type="text" name="size" placeholder="size" value="" />
				<input type="submit" id="searchBtn" value="検索" />
			</form>
		</div>
	</section>
	
	<section id="list" class="two">
		<div class="container">
		</div>
	</section>

</div>

<script type="text/javascript">
	$('form[name=searchForm]').submit(function (e) {
		e.preventDefault();
		var request = {
			'query': $('input[name=query]').val(),
			'search': $('input[name=search]').val(),
			'filters': $('input[name=filters]').val(),
			'sort_by': $('input[name=sort_by]').val(),
			'order': $('input[name=order]').val(),
			'from': $('input[name=from]').val(),
			'size': $('input[name=size]').val(),
		}
		$.ajax({
			type: 'GET',
			url: '/ajax/tv_list.json',
// 			data: JSON.stringify(request),
			data: request,
			contentType: 'application/json',
			dataType: 'json',
			success: function(result_success) {
				console.log(result_success);
			},
			error: function(result_error) {
				console.log(result_error);
			},
			complete: function(comp_data) {
				console.log(comp_data);
			}
		});
	});
</script>