#!F:\soft\python\python.exe
# -*- coding: UTF-8 -*-

print "content-type:text/html;charset=utf-8" 
print
#加载urllib模块
import urllib
import urllib2
#加载re模块
import re
import MySQLdb

class baijia:
    #构建函数
    def __init__(self):
        self.url="http://baijia.baidu.com/"
    #获取整页内容
    def getcontent(self):
        url=self.url
        res=urllib2.urlopen(url)
        content=res.read()
        return content
    #获取标题
    def gettitle(self):
        conten=self.getcontent()
        res=re.compile('<div id="menu".*?>(.*?)</div>',re.S)
        content = re.search(res,conten)
        return content.group(1)
    #获取a标签
    def get(self):
        conten=self.gettitle()
        res=re.compile('<a href="(http://.*?)"*?>(.*?)</a>',re.S)
        content = re.findall(res,conten)
        return content
        
    #去掉多余的class
    def to(selt,data):
        res=re.compile('(".*?)')
        im=re.sub(res,'',data)
        return im
#调用
all=baijia()
baijia=all.get()
#连接数据库
db=MySQLdb.connect("localhost","root","root","python",charset='gbk')
#用cursor()函数生成游标
cursor=db.cursor()
for item in baijia:
    #print all.to(item[0]),item[1]
    sql="INSERT INTO BAIJIA(url,title)VALUES(%s,%s)" %("'"+all.to(item[0])+"'","'"+item[1]+"'")
    try:
        cursor.execute(sql)
        db.commit()
    except:
        db.rollback()
