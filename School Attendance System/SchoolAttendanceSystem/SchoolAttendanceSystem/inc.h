#pragma once
#include "afxwin.h"
#include <cstring>
class inc
{
public:
	//staff database
	CString staffname;
	CString staffdep;
	CString staffsub;
	CString staffsubcode;
	CString staffuser;
	CString staffpass;

	//student database
	CString studentrollno[20];
	CString studentname[20];
	CString studentbranch[20];
	CString studentdob[20];
	CString studentuser[20];
	CString studentpass[20];

	//subject database
	CString subject;
	CString subjectname;
	CString subjectcode;

	//absent roll no database
	CString abdate[20];
	CString absrollno[20];
	CString absub[20];
	CString abtype[20];

	//TEMP VAR
	CString tempuser;

	CString t1;
	CString t2;
	CString t3;
	
public:
	void assign();
	
};































