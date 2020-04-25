// Menu.cpp : implementation file
//

#include "stdafx.h"
#include "SchoolAttendanceSystem.h"
#include "Menu.h"
#include "StudentDetail.h"
#include "afxdialogex.h"


// Menu dialog

IMPLEMENT_DYNAMIC(Menu, CDialogEx)

Menu::Menu(CWnd* pParent /*=NULL*/)
	: CDialogEx(Menu::IDD, pParent)
{

}

Menu::~Menu()
{
}

void Menu::DoDataExchange(CDataExchange* pDX)
{
	CDialogEx::DoDataExchange(pDX);
}


BEGIN_MESSAGE_MAP(Menu, CDialogEx)
	ON_BN_CLICKED(IDC_BUTTON1, &Menu::OnBnClickedButton1)
	ON_BN_CLICKED(IDC_BUTTON2, &Menu::OnBnClickedButton2)
END_MESSAGE_MAP()


// Menu message handlers


void Menu::OnBnClickedButton1()
{
	// TODO: Add your control notification handler code here
	StudentDetail_Dialog s;
	s.DoModal();
}


void Menu::OnBnClickedButton2()
{
	// TODO: Add your control notification handler code here
}
