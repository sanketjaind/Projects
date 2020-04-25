// StudentDetail.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "StudentDetail.h"
#include "afxdialogex.h"


// StudentDetail dialog

IMPLEMENT_DYNAMIC(StudentDetail, CDialogEx)

StudentDetail::StudentDetail(CWnd* pParent /*=NULL*/)
	: CDialogEx(StudentDetail::IDD, pParent)
{

}

StudentDetail::~StudentDetail()
{
}

void StudentDetail::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(StudentDetail, CDialogEx)
END_MESSAGE_MAP()


// StudentDetail message handlers
