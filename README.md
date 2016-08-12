# HTTP Packet Collector


a PHP webpage as a honeypot collecting HTTP packet for debug use.

## Usage

1. Put the files at PHP enabled http server. (e.g. Apache, Nginx...)
2. Make sure the `files/data.txt` is writable.
3. Let the testing server to access the your receiver URL.
4. Browse the preview URL and read the raw HTTP packet.

#### Receiver URL

Let the testing server to access the following URL

```
http://YOUR_SERVER_IP/PacketCollector-php/upload.php
```
It will return nothing.


#### Preview URL

Use this URL in your browser to see the raw log

```
http://YOUR_SERVER_IP/PacketCollector-php/preview.php
```

If you use browsing recevier URL via browser, you will see something like this:

```
GET /packet_collector-php/upload.php HTTP/1.1
HOST: YOUR_SERVER_IP
CONNECTION: keep-alive
CACHE-CONTROL: max-age=0
UPGRADE-INSECURE-REQUESTS: 1
USER-AGENT: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/52.0.2743.116 Safari/537.36
ACCEPT: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
ACCEPT-ENCODING: gzip, deflate, sdch
ACCEPT-LANGUAGE: en-US,en;q=0.8,zh-TW;q=0.6,zh;q=0.4

```
More about HTTP raw packet please refer RFC2616 or W3C website.


## Troubleshooting

If you received the error message like this:

```
Warning: file_put_contents(./files/data.txt): failed to open stream: Permission denied in /YOUR_FILE_PATH/htdocs/PacketCollector-php/upload.php on line 11
```

that means `files/data.txt` is not writable. 
Use this command to change it.

```
$ chmod +w files/data.txt
```
