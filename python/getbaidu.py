#!F:\soft\python\python.exe
# -*- coding: UTF-8 -*-

print 

#加载urllib模块
import urllib
import urllib2
#加载re模块
import re
import MySQLdb


class getbaidu:

    #构造函数	
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #获取整页内容
    def getall(self):
        url = self.url
        response = urllib2.urlopen(url)
        content = response.read()
        return content
        # request = urllib2.Request(url)
        # response = urllib2.urlopen(request)
        # return response.read()
    #获取标题
    def gettitle(self):
        getall = self.getall()
        res = re.compile('(<ul class="clearfix".*?)<i class="slogan"></i>',re.S)
        items = re.search(res,getall)
        return items.group(1)
    #获取a里的东西
    def getnuma(self):
        gettitle = self.gettitle()
        res = re.compile('<a href="(http://.*?/).*?>(.*?)</a>',re.S)
        items = re.findall(res,gettitle)
        return items
        
    #去掉div
    def todiv(self,data):
        res = re.compile('<div.*?</div>')
        im = re.sub(res, '', data)
        return im







get=getbaidu()
getbaidu=get.getnuma()	
#连接数据库
db=MySQLdb.connect("localhost","root","root","python",charset='gbk')
#创建操作的游标
cursor=db.cursor()
#执行添加
for item in getbaidu:
    #print item[0], get.todiv(item[1])
    sql="INSERT INTO GETBAIDU(url,title)VALUES(%s,%s)" %("'"+get.todiv(item[1])+"'","'"+item[0]+"'")	
    try:
         cursor.execute(sql)
         db.commit()
    except:
         db.rollback()
         #print "fail"