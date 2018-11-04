VERSION 5.00
Begin VB.Form Main_menu 
   BorderStyle     =   0  'None
   Caption         =   "Main Menu"
   ClientHeight    =   3090
   ClientLeft      =   7020
   ClientTop       =   3270
   ClientWidth     =   5205
   Icon            =   "Menu Bar.frx":0000
   LinkTopic       =   "Form1"
   MouseIcon       =   "Menu Bar.frx":1982
   Picture         =   "Menu Bar.frx":367C
   ScaleHeight     =   3090
   ScaleWidth      =   5205
   ShowInTaskbar   =   0   'False
   Begin VB.CommandButton cmdCancel 
      BackColor       =   &H0080FF80&
      Caption         =   "E&xit"
      Height          =   495
      Left            =   3600
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   3
      Top             =   2040
      Width           =   975
   End
   Begin VB.CommandButton cmdLogin 
      BackColor       =   &H0080FF80&
      Caption         =   "Login"
      Height          =   495
      Left            =   2040
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   2
      Top             =   2040
      UseMaskColor    =   -1  'True
      Width           =   1095
   End
   Begin VB.CommandButton cmdRegister 
      BackColor       =   &H0080FF80&
      Caption         =   "Register"
      Height          =   495
      Left            =   480
      MaskColor       =   &H0080FF80&
      Style           =   1  'Graphical
      TabIndex        =   0
      Top             =   2040
      UseMaskColor    =   -1  'True
      Width           =   1095
   End
   Begin VB.Image Image1 
      Height          =   720
      Left            =   2160
      Picture         =   "Menu Bar.frx":10600
      Top             =   120
      Width           =   720
   End
   Begin VB.Label Label1 
      BackStyle       =   0  'Transparent
      Caption         =   "Welcome to Electronic Library"
      BeginProperty Font 
         Name            =   "Comic Sans MS"
         Size            =   15.75
         Charset         =   0
         Weight          =   700
         Underline       =   0   'False
         Italic          =   -1  'True
         Strikethrough   =   0   'False
      EndProperty
      ForeColor       =   &H8000000E&
      Height          =   615
      Left            =   240
      TabIndex        =   1
      Top             =   840
      Width           =   4815
   End
End
Attribute VB_Name = "Main_menu"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdCancel_Click()
End
End Sub

Private Sub cmdLogin_Click()
Main_menu.Hide
Login_form.Show
End Sub

Private Sub cmdRegister_Click()
Main_menu.Hide
Register.Show
End Sub

