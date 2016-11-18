#!F:\soft\python\python.exe
# -*- coding: UTF-8 -*-

print 


#加载urllib模块
import urllib
import urllib2
#加载re模块
import re
import MySQLdb

class gettitle:
    #构造函数   
    def __init__(self):
        self.url = "http://news.baidu.com/"
    #获取整个页面
    def getcontent(self):
        url = self.url
        res = urllib2.urlopen(url)
        content = res.read()
        return content
    #获取包含标题的内容
    def gettitle(self):
        content = self.getcontent()
        res = re.compile('(<div class="hotnews" alog-group="focustop-ho.*?)<ul id="goTop" class="mod-sidebar">',re.S)
        items = re.search(res,content)
        return items.group(1)
    #获取a标签
    def get(self):
        conten=self.gettitle()
        res=re.compile('<a href="(http://.*?").*?>(.*?)</a>',re.S)
        content = re.findall(res,conten)
        return content
        
    #去掉多余的class
    def to(selt,data):
        res=re.compile('(")')
        im=re.sub(res,'',data)
        return im
    def toimg(self,data):
        #rea=re.compile('<img r_src="(http://.*?").*?>',re.S)
        res=re.compile('<img r_src="(http://.*?").*?>')
        content = re.sub(res,'',data)
        return content
#实例化类
get = gettitle() 
title=get.get()
#连接数据库
db=MySQLdb.connect("localhost","root","root","python",charset='gbk')
#用cursor()函数生成游标
cursor=db.cursor()
for item in title:
            #print get.to(item[0]),get.toimg(item[1])
    sql="INSERT INTO TITLE(url,title)VALUES(%s,%s)" %("'"+get.to(item[0])+"'","'"+get.toimg(item[1])+"'")
    try:
        cursor.execute(sql)
        db.commit()
    except:
         db.rollback()
