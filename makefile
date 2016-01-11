.PHONY: style asset html staging

style: ./style/*
	cd ./style && make style.css && cp style.css ../staging

asset: ./assets/*
	cp -r ./assets/* ./staging

html: ./html/*
	cp -r ./html/* ./staging

staging:style asset html
	
upload:staging
	./upload.sh
