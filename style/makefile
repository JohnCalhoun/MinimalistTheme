
style.raw.css: ./*scss
	sass main.scss style.raw.css

style.css: style.raw.css
	yuicompressor -o style.css --nomunge --type css style.raw.css && rm style.raw.css

all: style.css
