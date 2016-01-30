.PHONY: clear style asset php staging snapshot

clear: 
	rm -r ./staging/*

style: ./style/*
	cd ./style && make style.css && cp style.css ../staging


asset: ./assets/*
	cd ./assets && make all && cd .. && cp -r ./assets/* ./staging

php: ./php/*
	cp -r ./php/* ./staging

staging:style asset php

upload:staging
	./upload.sh
test:staging
	./upload_dev.sh
package:staging
	zip -r mnn.zip staging

push:
	git push -u origin master
commit:
	git commit -a -F commit.txt && > commit.txt
