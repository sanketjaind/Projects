#pragma once


// Menu dialog

class Menu : public CDialogEx
{
	DECLARE_DYNAMIC(Menu)

public:
	Menu(CWnd* pParent = NULL);   // standard constructor
	virtual ~Menu();

// Dialog Data
	enum { IDD = IDD_DIALOG1 };

protected:
	virtual void DoDataExchange(CDataExchange* pDX);    // DDX/DDV support

	DECLARE_MESSAGE_MAP()
public:
	afx_msg void OnBnClickedButton1();
	afx_msg void OnBnClickedButton2();
};
