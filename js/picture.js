class Picture{
	constructor(selector, url){
		this.selector = selector;
		this.url = url;
	}
	change(){
		let pic = $(this.selector);
		pic.attr('src',this.url);
	}

}