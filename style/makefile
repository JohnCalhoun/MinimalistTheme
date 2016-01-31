
style.css: ./*scss
	sass main.scss style.css

style.min.css: style.css
	yuicompressor -o style.min.css --nomunge --type css style.css && rm style.css

all: style.min.css
