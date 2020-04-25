// StudentAttendance.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "StudentAttendance.h"
#include "afxdialogex.h"


// StudentAttendance dialog

IMPLEMENT_DYNAMIC(StudentAttendance, CDialog)

StudentAttendance::StudentAttendance(CWnd* pParent /*=NULL*/)
	: CDialog(StudentAttendance::IDD, pParent)
{

}

StudentAttendance::~StudentAttendance()
{
}

void StudentAttendance::DoDataExchange(CDataExchange* pDX)
{
	CDialog::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(StudentAttendance, CDialog)
END_MESSAGE_MAP()


// StudentAttendance message handlers
