#!F:\soft\python\python.exe
# -*- coding: UTF-8 -*-

print
#加载urllib2模块
import urllib2
#加载re模块
import re

url="http://news.baidu.com"
response = urllib2.urlopen(url)
content = response.read()

res = re.compile('(<div id="channel-all".*?)<div id="body" alog-alias="b"',re.S)
items = re.findall(res,content)
for item in items:
    print item